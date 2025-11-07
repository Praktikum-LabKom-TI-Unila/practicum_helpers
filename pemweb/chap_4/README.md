ini buat test html sanitazion

di modul itu ada _htmlspecialchars()_, nah pakai ini buat demo bagaimana pentingnya html sanitazion buat mencegah XSS
BUAT RUN KODE INI, CUKUP jalanin perintah

```php
cd pemweb/chap_4
php -S localhost:<port>
```

pake port yang ga dipake ex: 8080, 1234

test inject alert js di payload url

DEMO :
_safe.php_

![inisialisasi](./assets/safe_init.png)

#### Payload ketika kirim alert('XSS')

![gambar payload url ketika gunakan htmlspecialchars](./assets/safe_1.png)

#### Hasil di DOM

![hasil di DOM](./assets/safe_2.png)

Muncul script dianggap sebagai text plain, ini berkat _htmlspecialchars_ sehingga dapat mengatasi XSS (Cross-site scripting)

_vuln.php_

![vuln init](./assets/vuln_init.png)

#### Payload ketika kirim alert('XSS')

![gambar payload url ketika tidak menggunakan htmlspecialchars](./assets/vuln_1.png)

Hasil nya bisa dilihat di web

![Hasil di web](./assets/vuln_2.png)

#### Hasil di DOM

![hasil di DOM](./assets/vuln_3.png)

Muncul isi tag "h1" ada tag "script" yang dimana ini indikasi dari XSS (Cross-site Scripting). Hal ini disebabkan oleh tanpa ada nya html sanitazion atau tidak di handle menggunakan _htmlspecialchars()_
