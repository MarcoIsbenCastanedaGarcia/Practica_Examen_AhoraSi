CREATE DATABASE IF NOT EXISTS fakestack_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;


CREATE USER IF NOT EXISTS
'fakestack_user'@'localhost'
IDENTIFIED BY
'FakeStack2026!';


GRANT ALL PRIVILEGES
ON fakestack_db.*
TO 'fakestack_user'@'localhost';


FLUSH PRIVILEGES;