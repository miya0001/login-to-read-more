=== Login to read more ===
Contributors: miyauchi
Donate link: http://wpist.me/
Tags: shortcode, login, member, register, post, page
Requires at least: 3.5
Tested up to: 3.5
Stable tag: 0.2.0

Display content enclosed by the shortcode for registered users only.

== Description ==

Display content enclosed by the shortcode for registered users only.

`[auth]This content will display for registered users only[/auth]`

https://github.com/miya0001/login-to-read-more

= Arguments =

* class - Class name for css. default value is "btn btn-primary btn-large"
* href - Link URL for button. default value is login url for your site
* text - Button text. default value is "Login to read more"

The following will add a class as argument.

`Example: [auth class="foo"]
Output: <a class="foo" ...>...</a>`

The following will change url link.

`Example: [auth href="http://example.com/xxx/"]
Output: <a href="http://example.com/xxx/" ...>...</a>`

The following will change text.

`Example: [auth text="Join"]
Output: <a ...>Join</a>`

= Filter Hook =

* login_to_read_more_class - Change default class.
* login_to_read_more_href - Change default url.
* login_to_read_more_text - Change default text.

The following is example for "login_to_read_more_text" filter.

`add_filter('login_to_read_more_text', 'my_login_to_read_more_text');
function my_login_to_read_more_text(){
    return 'Join';
}`

== Installation ==

* A plug-in installation screen is displayed on the WordPress admin panel.
* It installs it in `wp-content/plugins`.
* The plug-in is made effective.

== Screenshots ==

1. Visual Editor.
2. Short code output.

== Credits ==

This plug-in is not guaranteed though the user of WordPress can freely use this plug-in free of charge regardless of the purpose.
The author must acknowledge the thing that the operation guarantee and the support in this plug-in use are not done at all beforehand.

