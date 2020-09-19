# Laravel Instagram like project
This project focuses on the basic capabilites of a social media application
  - Easy to understand and use UI.
  - Creating, Editing and Deleting Posts
  - Ability to Create and Delete comment and like/dislike the posts.
  - Creating and Editing a profile with a profile picture.
  - Following other users and having a followings feed.

# Installation!

> Clone the repository and follow the steps.

Set up your .env file to your desired database!
```sh
cd master
composer install
php artisan migrate
php artisan sorage:link
```
Note: You can check the artisan command list and its description with the command:
```sh
php artisan
```

### Tech

Used technologies for this project:

* [Laravel] - Best framework for creating awesome apps fast.
* [PHP] - for the best web apps!
* [PHP Storm] - Awesome php text editor by jetbrains.
* [MySQL] - Oracles awesome database.
* [Vue.js] - For a component based front-end.
* [Bootstrap] - UI design.
* [Github] - duh.

# Usage
Run the command (default port: '8000')
```sh
php artisan serve
```

### - Guest:
- Able to visit individual posts.
- Able to visit individual profiles.
- Unable to follow, create, modify anything.

### - User:
- Able to login to your Profile
- Update your Account setting and your profile settings
- Following other Users.
- Creating and Updating posts.
- View other users post individually or through various post feed.
- Able to Create and Delete(self) comment and Like on any posts.


License
----
Free to use, free to modify, free to share.

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [MySQL]: <https://www.mysql.com/>
   [Github]: <https://github.com/>
   [Bootstrap]: <https://getbootstrap.com/>
   [jQuery]: <http://jquery.com>
   [Laravel]: <https://laravel.com/>
   [Php]: <https://www.php.net/>
   [PHP storm]: <https://www.jetbrains.com/phpstorm/>
   [Vue.js]: <https://vuejs.org/>
