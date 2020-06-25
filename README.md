# eaapen Template
[eaapen](https://github.com/9072997/eaapen) is a minimal library for building internal [App Engine](https://cloud.google.com/appengine) apps for users on your own G-suite domain, though in principal it could be used for public facing apps as well. It exists primarily to handle group-based authentication (ex: only members of `accounting-team@example.com` should have access to `accounting.php`). It also contains a router that emulates the way PHP behaves without a router (ex: `http://example.com/foo.php` invokes `foo.php` [the `.php` is optional in the URL] and `http://example.com/foo.png` serves the static resource `foo.png`). Here is the quick-start to a development environment on Windows:
* You will need 2 types of credential files: an OAuth client ID and a Service Account. The service account is only needed in development, since App Engine will put this in place for you when you deploy. You can get both files from [here](https://console.cloud.google.com/apis/credentials).
   * For the service account you can just download a key for the App Engine default service account rather than creating an additional account if you like.
   * For the OAuth client ID you will need to configure your authorized redirect URLs before downloading the key. Assuming your local developement environment will be hosted at `http://localhost:8080` and your real App Engine url is `https://example.appspot.com` you should configure the following authorized redirect URLs:
     * `http://localhost:8080/login`
     * `http://localhost:8080/adminLogin`
     * `https://example.appspot.com/login`
     * `https://example.appspot.com/adminLogin`
  * Replace the contents of the [oauth-client-id.json](oauth-client-id.json) file with the OAuth client ID you downloaded. You can save the service account key anywhere (preferably in another folder so you don't accidentally deploy it with your application).
* If you don't already have [composer](https://getcomposer.org/) installed, install it. Then, while in the root folder of your project, run `composer install` to install all dependencies
* Set the environment variable `GOOGLE_APPLICATION_CREDENTIALS` to point to the full path to your service account file. This is how you do that in PowerShell: `$env:GOOGLE_APPLICATION_CREDENTIALS='C:\path\to\service-account.json'`. Note that unless you take extra steps to make this persistant you will have to re-run this every time you launch your developement server.
* `cd` into the `public` folder and run `php -S localhost:8080 ../router.php`
* You should be able to see your site at http://localhost:8080
* Once you are ready to deploy you will need the [gcloud cli](https://cloud.google.com/sdk/gcloud) installed and configured to use your project. Once you have that set up run `gcloud beta app deploy` to deploy your app (the `beta` is nesisary right now since this uses PHP 7.4, though that should graduate to stable soon)
