# Link Preview

Makes a request to a URL like google.com and grabs the title, description and image if any, which can then be used to generate a link preview for a frontend application.

The source of this project is from: https://www.webslake.com/article/generating-link-preview-using-php/

## Demo

Visit `https://cockpit.khophi.co/api/linkPreview?token=1fde8df1c6d35f6020115d4a62e8a0&rspc=1&url=https://twitter.com`

Replace the `&url=https://twitter.com` part with any URL of your choice

## How to use

To use:

 - Create a PHP file (say, `linkPreview.php`) on your cockpit installation at `config/api/linkPreview.php`. You can do that from the admin section of your cockpit installation. Go to `your-cockpit-domain.com/finder`
 - Copy the contents of the `linkpreview.php` file in this repository into the `linkPreview.php` on your cockpit installation
 - Save file on cockpit
 - Visit your cockpit endpoint, `your-cockpit-domain.com/api/linkPreview?token=your-cockpit-api-token&url=twitter.com`

 You'll receive a response like this:

 ```
{
  title: "Twitter. It's what's happening",
  image: "",
  description: "From breaking news to the latest in entertainment, sports and politics, get the full story with all the live commentary.",
  host: "twitter.com",
  param: "https://twitter.com"
}
 ```

## License

Taken from the internet: https://www.webslake.com/article/generating-link-preview-using-php/