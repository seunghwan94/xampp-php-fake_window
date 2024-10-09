# Fake Window

php CodeIgniter 이용한 window 느낌나는 web 사이트 제작  

### 스크린 샷
![Untitled (17)](https://github.com/user-attachments/assets/29b0685b-0837-4f5d-bb97-4b29f73a9c68)
![Untitled (16)](https://github.com/user-attachments/assets/c2acdfcc-864b-4582-bf83-b147d225eee5)
![Untitled (15)](https://github.com/user-attachments/assets/b747a98c-9173-44ec-9f5a-c71ec4214aac)
![Untitled (18)](https://github.com/user-attachments/assets/83bb1bd9-138f-4cc2-81db-f71fa7bd7e96)

## 시작하기 전에

본 프로그램을 사용하기 위해서는 먼저 XAMPP를 설치해야 합니다.

## 설치 방법

### 1. XAMPP 설치

XAMPP를 [공식 웹사이트 V7.4.29](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.29/)에서 본인 컴퓨터에 맞는 프로그램 다운로드하고 설치합니다.

(본인은 xampp-windows-x64-7.4.29-1-VC15-installer.exe 이거로 설치함)

### 2. PHP 설정 변경

설치 후, `php.ini` 파일을 찾아 다음 설정을 변경합니다:

```plaintext
short_open_tag=On
```

### 3. 가상 호스트 설정

C:\xampp\apache\conf\extra\httpd-vhosts.conf 파일을 열고 다음 코드를 추가합니다

```apache
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:\xampp\htdocs\fakewindow"
    ServerName fakewindow
    ErrorLog "logs/fakewindow-error.log"
    CustomLog "logs/fakewindow-access.log" common
</VirtualHost>
```

이 설정은 fakewindow 이름의 로컬 웹사이트를 설정합니다.

### 4. 호스트 파일 수정

Windows의 경우, C:\Windows\System32\drivers\etc\hosts 파일을 관리자 권한으로 열고 다음 줄을 추가합니다

```
127.0.0.1 fakewindow
```

이는 로컬 도메인 fakewindow 로컬호스트 IP 주소에 매핑합니다.

### 5. 프로젝트 폴더 생성

C:\xampp\htdocs 내에 fakewindow라는 이름의 폴더를 만들고, 해당 폴더에 프로그램 코드를 넣습니다.

### XAMPP 자동 실행

XAMPP Control Panel을 사용하여 Apache을 자동으로 시작하도록 설정할 수 있습니다. 
XAMPP Control Panel을 열고, Apache 옆의 'Service' 체크박스를 선택하여 시스템 시작 시 자동으로 실행되도록 합니다.

### 사용 방법
모든 설정이 완료되면, 웹 브라우저에서 http://fakewindow/ 로 접속하여 프로그램을 사용할 수 있습니다.
