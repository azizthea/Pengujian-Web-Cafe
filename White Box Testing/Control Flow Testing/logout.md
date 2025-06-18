# White Box Testing – logout.php

## Tujuan:
Memastikan session dihapus dan pengguna keluar dari sistem.

## Control Flow:
1. [Start]
2. Mulai session
3. Kosongkan `$_SESSION`
4. Destroy session
5. Redirect ke `login.php` 
6. [End]

## Hasil:
✅ Logout berjalan sederhana dan aman.
