# crypt
class នេះប្រើសម្រាប់បម្លែង password user ទៅជា crypt password (សម្រាប់ទុកនៅក្នុងDatabaseយើង) និង function ផ្ទៀងផ្ទាត់ crypt password ជាមួយpasswordដើមវិញ

ដំបូងយើងincludeវាចូលមកកាន់ project យើងប្រើ include_once("crypt/Crypt.php");


យើងអាចហៅវាមកប្រើ  Crypt::make($youruserspassword);

example

----------

$userpassword = "thisisapassword";

$cryptedPassword = Crypt::make($userpassword); {string content} //for store in your database

--------

$verifypassword = Crypt::check($userpassword, $cryptedPassword); // this will return true or false (boolean)

