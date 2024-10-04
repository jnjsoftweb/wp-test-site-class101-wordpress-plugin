# 최초 생성

## local sites

"""
name: wp-test-site-class101-wordpress-plugin
user: jnjsoft.web
email: jnjsoft.web@gmail.com
"""

## files

### windows

> folder.file 삭제, 복사

```sh
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-content\\themes\\twentytwentythree"
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-content\\themes\\twentytwentytwo"

xcopy "C:\Users\Jungsam\Local Sites\\_templates\\basic\\*" "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\" /s /e /h /y
```

> file(_docs/*.md) 수정


### macos

> folder.file 삭제, 복사

```sh
rm -rf "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-content/themes/twentytwentythree"
rm -rf "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-content/themes/twentytwentytwo"

cp -R "/Users/youchan/Local Sites/_templates/basic/". "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/"
```

> file(_docs/*.md) 수정


## github

```sh
github -e pushRepo -u jnjsoftweb -n wp-test-site-class101-wordpress-plugin -d "CLASS101 예비/현직 웹 프로그래머를 위한 워드프레스 플러그인 개발!"
```


-----

# copy

## local sites

"""
name: wp-test-site-class101-wordpress-plugin
user: jnjsoft.web
password:
email: jnjsoft.web@gmail.com
"""

## files

### windows

> folder.file 삭제

```sh
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-content\\themes\\twentytwentythree"
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-content\\themes\\twentytwentytwo"
```

### macos

> folder.file 삭제

```sh
rm -rf "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-content/themes/twentytwentythree"
rm -rf "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-content/themes/twentytwentytwo"
```

## github clone

```sh
github -e copyRepo -u jnjsoftweb -n wp-test-site-class101-wordpress-plugin
```


## move github local repository

### windows

```sh
xcopy "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-test-site-class101-wordpress-plugin\\*" "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\" /s /e /h /y
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-class101-wordpress-plugin\\app\\public\\wp-test-site-class101-wordpress-plugin"
```

### macos

```sh
cp -R "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-test-site-class101-wordpress-plugin/". "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/"
rm -rf "/Users/youchan/Local Sites/wp-test-site-class101-wordpress-plugin/app/public/wp-test-site-class101-wordpress-plugin"
```


