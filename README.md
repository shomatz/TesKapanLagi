# teskapanlagi

# How to deploy to Heroku

$ git clone https://github.com/shomatz/teskapanlagi.git
$ cd teskapanlagi
$ echo web: vendor/bin/heroku-php-apache2 public/ Procfile
$ git add .
$ git commit -m "Procfile for Heroku"
$ heroku create
$ heroku config:set APP_KEY=base64:rfZ2u8xrmp6e+axjhpDfTFD1ZkL99ZmHdeVjFsugbPs=
$ git push heroku master
$ heroku open
