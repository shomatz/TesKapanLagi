# teskapanlagi<br><br>

# How to deploy to Heroku<br><br>

$ git clone https://github.com/shomatz/teskapanlagi.git<br>
$ cd teskapanlagi<br>
$ echo web: vendor/bin/heroku-php-apache2 public/ Procfile<br>
$ git add .<br>
$ git commit -m "Procfile for Heroku"<br>
$ heroku create<br>
$ heroku config:set APP_KEY=base64:rfZ2u8xrmp6e+axjhpDfTFD1ZkL99ZmHdeVjFsugbPs=<br>
$ git push heroku master<br>
$ heroku open<br>
