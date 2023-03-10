## Installation

```bash
git clone https://github.com/eustatos/wordpress-docker-dev-env.git
```
or, if you prefer `ssh`
```bash
git clone git@github.com:eustatos/wordpress-docker-dev-env.git
```
After
```bash
cd wordpress-docker-dev-env
docker-compose up -d
docker-compose exec -T wp-cli sh < install.sh
```
Open in browser `localhost:8080`
Default admin login - `admin`
Default admin password - `123`

You can chage this and other environment variables in `site.env` and `.env`.

Now you can modify or create content in folder `wp-content`.
If you have trouble with permissions - run:
```bash
sudo usermod -a -G www-data $USER
```

## Customization

If you don't want create default theme or/and plugin, you can modify
`install.sh`.
```bash
#!/usr/bin/env bash

wp core download --force --allow-root
wp config create \
  --dbhost=$WORDPRESS_DB_HOST \
  --dbname=$WORDPRESS_DB_NAME \
  --dbuser=$WORDPRESS_DB_USER \
  --dbpass=$WORDPRESS_DB_PASSWORD \
  --allow-root
wp core install \
  --title=$TITLE \
  --url=$URL \
  --admin_user=$ADMIN_USER \
  --admin_password=$ADMIN_PASSWORD \
  --admin_email=$ADMIN_EMAIL \
# add for skip creation default themes
  --skip-themes
# add for skip creation default plugins
  --skip-plugins
  --allow-root
```

Read more about `wp core install`
[here](https://developer.wordpress.org/cli/commands/core/install/)

## Example command for create content

For example, if you want to develop new theme based on `underscores`
```bash
docker-compose exec -T wp-cli wp scaffold _s \
  sample-theme \
  --theme_name="Sample Theme" \
  --author="John Doe"
```
This command create folder `sample-theme` in `wp-content` and you can start to
develop

[![video tutorial](https://img.youtube.com/vi/0TQU8y6hZ30/0.jpg)](https://www.youtube.com/watch?v=0TQU8y6hZ30)

устраняем ошибку 


1. скачать jqwery селектора +
2. сделать адаптивку всех страниц +
3. сделать затемнениеи +  и слайдер лого + повторить это в категориях +
4. колличество слайдов под бегущей строкой (адаптивка) +
5. при переходе из меню в заметки открывается по умолчанию "я в сми" должны открываться заметки -

6. сделать страницу издательств +
8. не работют заметки в строку при выборе нужной плитки (из за медиа) +
9. черты на лого +
10. ссылки в меню в таком виде http://localhost:8080/articles/ -

11. меню < 1025рх +
12. актуальные стиль + не получается скрыть нa 1024 +

13. селектор даты настроить и адаптировать -

14. исправтиь мобильное меню -
15. в single кнопка далее и назад не работает +  