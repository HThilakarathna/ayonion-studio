# cPanel Email Setup Guide - Contact Form Integration

This guide walks you through setting up customer inquiry email handling via cPanel SMTP.

## Overview

Your contact form now uses **PHPMailer with cPanel SMTP** for reliable email delivery. Inquiries are sent as professionally formatted HTML emails through your cPanel-hosted email account.

---

## Step 1: Create Email Account in cPanel

### Access cPanel
1. Log in to your cPanel dashboard
2. Navigate to **Email Accounts** (under "Mail" section)

### Create New Email Account
1. Click **Create** button
2. Fill in the following:
   - **Email**: `info@ayonionstudios.com` (or your preferred email)
   - **Password**: Create a strong password (save this!)
   - **Quota**: Set to appropriate size (e.g., 500 MB)
3. Click **Create**

---

## Step 2: Get Your SMTP Details

### For Most cPanel Hosts:
- **SMTP Server**: `mail.yourdomain.com` (replace yourdomain.com with yours)
- **Port**: `587` (TLS) or `465` (SSL)
- **Username**: `info@ayonionstudios.com` (full email address)
- **Password**: The password you just created
- **Encryption**: TLS (recommended)

### Alternative: Check Email Authentication Settings
1. In cPanel, go to **Mail** → **Email Authentication**
2. Verify your domain's SMTP settings
3. Note the exact hostname provided

---

## Step 3: Create .env File

1. Copy the provided `.env.example` in your project root
2. Create a file named `.env` with these contents:

```
# Email Configuration for cPanel
SMTP_USER=info@ayonionstudios.com
SMTP_PASS=your_cpanel_email_password
SMTP_HOST=mail.ayonionstudios.com
SMTP_PORT=587
SMTP_SECURE=tls
FROM_NAME=Ayonion Studios
INQUIRY_RECIPIENT=info@ayonionstudios.com
ADMIN_EMAIL=admin@ayonionstudios.com
```

### Important Security Notes:
- **Never commit `.env` to Git** - add it to `.gitignore`
- Only `.env.example` should be in version control (with dummy values)
- Keep `.env` file permissions restricted (not readable by others)

---

## Step 4: Configure the Contact Form

Your contact form is already configured to:
1. **Capture inquiries** with: Name, Email, Phone, Service, Message
2. **Send HTML emails** through cPanel SMTP
3. **Fall back gracefully** if SMTP fails
4. **Display success/error** messages to users

### Form Handler Location
The form processing is in:
- **Handler**: [config.php](config.php#L10-L70)
- **Mailer**: [includes/mailer.php](includes/mailer.php)
- **Form HTML**: [sections/contact.php](sections/contact.php)

---

## Step 5: Test the Setup

### Test Email Sending
1. Go to your website's contact page
2. Fill out the form:
   - Name: "Test User"
   - Email: your-email@example.com
   - Service: Any option
   - Message: "Test message"
3. Click Submit
4. Check `info@ayonionstudios.com` for the inquiry

### Expected Results
- Email should arrive within seconds
- Format: Professional HTML with all inquiry details
- Subject line: "New Inquiry from [Name] - Ayonion Studios"

### Troubleshooting

**Email not received?**
- ✓ Verify SMTP credentials in `.env` are correct
- ✓ Check cPanel email account exists and is enabled
- ✓ Confirm SMTP/Port are correct (587/TLS or 465/SSL)
- ✓ Check spam/junk folder
- ✓ Verify email quota hasn't been exceeded

**Localhost Testing**
- For debugging on localhost, check your browser console or website logs
- Success message will display even without SMTP (fallback mode)
- Developer preview shows what would be sent (localhost only)

---

## Step 6: Advanced Configuration

### Send Confirmation Email to Customers (Optional)

Uncomment in [config.php](config.php#L67):

```php
// Send confirmation email to customer
sendAyonionEmail($email, "We received your inquiry - Ayonion Studios", 
    "Thank you for reaching out! We'll get back to you soon.");
```

### Auto-Reply Template

Create a professional HTML auto-reply:

```php
$auto_reply = "<html><body style='font-family: Arial, sans-serif;'>";
$auto_reply .= "<h2>Thank You!</h2>";
$auto_reply .= "<p>We've received your inquiry and will respond within 24 hours.</p>";
$auto_reply .= "<p>Best regards,<br/>Ayonion Studios Team</p>";
$auto_reply .= "</body></html>";

sendAyonionEmail($email, "Thank you for contacting Ayonion Studios", $auto_reply);
```

### Multiple Recipients

To send inquiries to multiple team members:

```php
// In config.php, modify the recipient handling
$recipients = explode(',', getenv('INQUIRY_RECIPIENTS'));
foreach ($recipients as $recipient) {
    sendAyonionEmail(trim($recipient), $subject, $email_content, $plain_text);
}
```

Update `.env`:
```
INQUIRY_RECIPIENTS=info@ayonionstudios.com,admin@ayonionstudios.com
```

---

## Step 7: Email Logs & Monitoring

### View Email Activity in cPanel
1. Go to **Mail** → **Email Delivery Reports**
2. Check sent/failed emails and bounce rates
3. Monitor for delivery issues

### Keep Inbox Organized
1. Create email filters/rules for inquiries
2. Label emails by service type
3. Set up auto-replies during vacations

---

## Step 8: Production Checklist

Before going live:

- [ ] `.env` file created with correct SMTP credentials
- [ ] `.env` file is in `.gitignore` (never committed)
- [ ] Email account created in cPanel
- [ ] Test form submission successful
- [ ] Email received in correct inbox
- [ ] cPanel email quota monitoring enabled
- [ ] SSL certificate installed on domain
- [ ] DNS records properly configured (MX records)

---

## Troubleshooting Reference

| Issue | Solution |
|-------|----------|
| "Could not authenticate with SMTP" | Verify SMTP_USER, SMTP_PASS, SMTP_HOST |
| Emails sent but marked as spam | Configure SPF, DKIM, DMARC records (cPanel → Email Authentication) |
| Emails not sending on production | Ensure SMTP port isn't blocked by firewall (use 587 over 465) |
| "Server doesn't support login" | Try different port (587 vs 465) or contact hosting provider |
| Emails delayed | Check cPanel server load; consider upgrading email quota |

---

## Security Best Practices

1. **SMTP Credentials**
   - Use strong, unique passwords
   - Don't share credentials
   - Rotate passwords periodically

2. **Email Spoofing Prevention**
   - Configure SPF records: `v=spf1 mx ~all`
   - Enable DKIM signing in cPanel
   - Set up DMARC policy

3. **Data Privacy**
   - Consider GDPR/privacy compliance
   - Store inquiry data securely
   - Provide unsubscribe options if sending newsletters

4. **Regular Maintenance**
   - Monitor disk usage for email backups
   - Clean old emails periodically
   - Review access logs for suspicious activity

---

## Support Resources

- **cPanel Email Support**: Log in to cPanel → Help
- **PHPMailer Docs**: https://github.com/PHPMailer/PHPMailer
- **Email Authentication**: cPanel → Mail → Email Authentication

---

## File Reference

- [.env.example](.env.example) - Environment configuration template
- [config.php](config.php) - Contact form handler
- [includes/mailer.php](includes/mailer.php) - Email sending function
- [sections/contact.php](sections/contact.php) - Contact form UI
