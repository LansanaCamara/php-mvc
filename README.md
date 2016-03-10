PHP MVC Framework
============================
* A very basic start to your own PHP MVC framework.

Installation
============================
  1. Clone the repo
  2. Go to the root directory in your browser to see the default view. It will display `Home Page`.

Getting Started
----------------------------
Create a new file in `app/models`. Example: `Contact.php`.

In `app/models/Contact.php'...`

```
class Contact
{
    public $title = 'Contact Page';
}
```

Then in `app/controllers/ContactController.php`...

```
class ContactController extends Controller
{
    public function index()
    {
        $contact = $this->model('Contact');

        $this->view('contact', ['title' => $contact->title]); // Loads 'public/views/pages/contact.php' and passes a $title value that equals 'Contact Page'.
    }
}
```

Finally, the `$title` variable can be used in our view at `public/views/pages/contact.php`...

```
<h1><?php echo $title; ?></h1> // Outputs 'Contact Page'
```
