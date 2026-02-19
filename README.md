# Hospital Management System (Simple HMS)

A lightweight PHP-based hospital management system intended for local development (XAMPP). It provides patient and doctor management, appointment handling, prescription generation, search utilities, and email notification support.

**Features:**
- **Patient registration:** Create and manage patient records.
- **Doctor management:** Add/remove doctors and view doctor lists.
- **Appointments & prescriptions:** Create and view prescriptions and appointment records.
- **Search:** Search patients, doctors, messages, and prescriptions.
- **Email updates (added):** Sends notification emails (e.g., when adding a doctor or registering a patient).

**Tech stack:**
- PHP
- MySQL
- PHPMailer (vendor/PHPMailer)
- Bootstrap + jQuery for UI

**Quick start (local / XAMPP)**

1. Place the project folder in your webroot (e.g., `C:\xampp\htdocs\hospital`).
2. Start Apache and MySQL from the XAMPP control panel.
3. Create a MySQL database and import `myhmsdb.sql`.
4. Open `http://localhost/hospital` in your browser.

If you need dependencies:

```bash
composer install
```

**Configuration**

- **Database:** Edit the DB settings in [include/config.php](include/config.php) to match your MySQL credentials.

- **SMTP / Email:** Email sending is handled by the helper in [include/mail.php](include/mail.php). By default it uses PHPMailer + SMTP (Gmail example). Open that file and update these settings or, better, modify it to load credentials from environment variables:

```php
// in include/mail.php (example)
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-smtp-password-or-app-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
```

Important: Do NOT commit real credentials. Use app passwords or a dedicated SMTP account and store secrets outside the repository.

**Email updates — how to use**

- The helper function `sendMail($to, $subject, $body)` is defined in [include/mail.php](include/mail.php).
- Common trigger points include: `func.php` and `admin-panel1.php` where a new doctor or user registration may call the mail helper.

To send an email from your code:

```php
require_once 'include/mail.php';
sendMail('recipient@example.com', 'Subject here', '<p>A short HTML message</p>');
```

**Security recommendations**

- Move SMTP/database credentials to environment variables and read them in your PHP code.
- Use an app-specific password for Gmail; consider a transactional provider (SendGrid/Mailgun) for production.
- Hash passwords (bcrypt) instead of storing plaintext.

**Where to look in the code**
- Main pages: `index.php`, `admin-panel.php`, `doctor-panel.php`
- Helpers: `func.php`, `newfunc.php`
- DB config: [include/config.php](include/config.php)
- Mail helper: [include/mail.php](include/mail.php)
- SQL schema: `myhmsdb.sql`

**Troubleshooting**

- If email sending fails, temporarily enable PHPMailer debug output in [include/mail.php](include/mail.php):

```php
$mail->SMTPDebug = 2; // debug output
```

- Verify DB connectivity in [include/config.php](include/config.php) and ensure MySQL is running.

**Suggested next steps I can help with**
- Move credentials into environment variables and update `include/mail.php` accordingly.
- Remove plaintext SMTP credentials from the repo and replace with a secure loader.
- Add a small admin UI to test SMTP settings.

---

File created: `README_GENERATED.md` — let me know if you want this merged into `README.md` or prefer adjustments (language, more examples, screenshots).
