<?php
/**
 * Ayonion Studios - Inquiry Logger (Optional)
 * 
 * This file can be included in config.php to maintain a local log of all inquiries.
 * Useful for backup and tracking purposes.
 * 
 * Usage in config.php after successful mail send:
 * logInquiry($name, $email, $phone, $service, $message);
 */

function logInquiry($name, $email, $phone, $service, $message) {
    $logs_dir = dirname(__DIR__) . '/logs';
    
    // Create logs directory if it doesn't exist
    if (!is_dir($logs_dir)) {
        @mkdir($logs_dir, 0755, true);
    }
    
    // Create CSV log file if it doesn't exist
    $log_file = $logs_dir . '/inquiries.csv';
    if (!file_exists($log_file)) {
        $header = "Timestamp,Name,Email,Phone,Service,Message\n";
        @file_put_contents($log_file, $header, FILE_APPEND);
    }
    
    // Prepare inquiry data with proper CSV escaping
    $timestamp = date('Y-m-d H:i:s');
    $csv_line = sprintf(
        "%s,%s,%s,%s,%s,%s\n",
        $timestamp,
        '"' . str_replace('"', '""', $name) . '"',
        '"' . str_replace('"', '""', $email) . '"',
        '"' . str_replace('"', '""', $phone) . '"',
        '"' . str_replace('"', '""', $service) . '"',
        '"' . str_replace('"', '""', substr($message, 0, 100)) . '..."'
    );
    
    // Append to CSV
    @file_put_contents($log_file, $csv_line, FILE_APPEND);
    
    // Also create a JSON backup for each inquiry
    $inquiry_data = [
        'timestamp' => $timestamp,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'service' => $service,
        'message' => $message,
        'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
    ];
    
    $json_file = $logs_dir . '/' . date('Y-m-d_H-i-s') . '_inquiry.json';
    @file_put_contents($json_file, json_encode($inquiry_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    
    return true;
}
