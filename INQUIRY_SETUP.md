# Customer Inquiry Setup - Quick Reference

## ✅ What's Been Implemented

Your website now has a complete customer inquiry handling system with cPanel integration:

### 1. **Enhanced Contact Form Handler**
   - Validates all required fields
   - Captures: Name, Email, Phone, Service, Message
   - Professional HTML email formatting
   - Plain text fallback for email clients

### 2. **cPanel SMTP Integration**
   - Uses PHPMailer library for reliable delivery
   - Fallback to standard PHP mail() if SMTP unavailable
   - Environment-based configuration (secure)

### 3. **Automatic Email Processing**
   - Inquiries automatically sent to info@ayonionstudios.com
   - Success/Error messages displayed to users
   - Developer preview for localhost testing

### 4. **Security Features**
   - `.gitignore` prevents accidental credential leaks
   - `.env` file for sensitive configuration
   - Input sanitization and validation

---

## 🚀 Quick Setup (5 minutes)

### Step 1: Create Email in cPanel
```
Email: info@ayonionstudios.com
Password: [Create strong password]
Quota: 500 MB minimum
```

### Step 2: Create `.env` File
Copy `.env.example` and rename to `.env`, then update:
```
SMTP_USER=info@ayonionstudios.com
SMTP_PASS=your_cpanel_password
SMTP_HOST=mail.ayonionstudios.com
SMTP_PORT=587
SMTP_SECURE=tls
```

### Step 3: Test
Submit the contact form on your website → Check email

---

## 📧 Email Flow

```
User Submits Form
    ↓
config.php Validates Data
    ↓
mailer.php Sends via cPanel SMTP
    ↓
Email Arrives in Inbox
    ↓
Success Message Shown to User
```

---

## 🔧 File Locations

| File | Purpose |
|------|---------|
| [.env.example](.env.example) | SMTP Configuration Template |
| [config.php](config.php#L10) | Contact Form Handler |
| [includes/mailer.php](includes/mailer.php) | Email Sending Function |
| [sections/contact.php](sections/contact.php) | Contact Form UI |
| [includes/inquiry_logger.php](includes/inquiry_logger.php) | Optional: Local Inquiry Logging |

---

## 📖 Full Documentation

For detailed setup instructions, troubleshooting, and advanced options:
→ See [CPANEL_SETUP_GUIDE.md](CPANEL_SETUP_GUIDE.md)

---

## ❓ Common Questions

**Q: Where do inquiries go?**
A: Email address specified in `.env` (INQUIRY_RECIPIENT`, default: info@ayonionstudios.com)

**Q: How long do emails take to send?**
A: Usually 1-5 seconds. Check spam folder if not received.

**Q: What if SMTP fails?**
A: System automatically falls back to PHP's mail() function.

**Q: Is my password secure?**
A: Yes! .env is in .gitignore, never committed to Git.

**Q: Can I log inquiries locally?**
A: Yes! Add this to config.php after `$message_sent = true;`:
```php
require_once __DIR__ . '/includes/inquiry_logger.php';
logInquiry($name, $email, $phone, $service, $message);
```

---

## ✨ Optional Enhancements

1. **Send auto-reply to customer** - Acknowledge receipt
2. **Route inquiries by service type** - Different emails for different services  
3. **Add database storage** - Keep inquiry history
4. **Send Slack/Discord notifications** - Real-time alerts
5. **Analytics dashboard** - Track inquiry metrics

---

## 🆘 Troubleshooting

| Problem | Solution |
|---------|----------|
| "SMTP connection failed" | Check SMTP_HOST, SMTP_PORT, and credentials in .env |
| Emails in spam folder | Configure SPF/DKIM in cPanel Mail settings |
| Form says success but no email | Check .env file exists and has correct values |
| Error on contact page | Enable display_errors temporarily to diagnose |

---

## 📞 Support

If issues persist:
1. Check the full guide: [CPANEL_SETUP_GUIDE.md](CPANEL_SETUP_GUIDE.md)
2. Verify cPanel email account exists and is active
3. Test SMTP credentials with telnet: `telnet mail.yourdomain.com 587`
4. Contact your hosting provider for SMTP details

---

**Last Updated:** May 25, 2026
