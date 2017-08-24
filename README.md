# Easy Video Player for WordPress

## Description

[Easy Video Player](https://noorsplugin.com/wordpress-video-plugin/) is a user-friendly WordPress video plugin for embedding and showcasing your videos. You can embed both self-hosted videos or videos that are externally hosted using direct links. It was developed by [noorsplugin](https://noorsplugin.com/) and is currently being used on over 30,000 websites.

## Easy Video Player Features

* Embed MP4 video into your website
* Embed responsive video for a better user experience while viewing from a mobile device
* Embed HTML5 video which are compatible with all major browsers
* Embed video with poster images
* Embed video with autoplay
* Embed video with loop
* Embed video with muted enabled
* Customize the video player using modifier classes
* Embed video using three different skins
* Embed video using MediaElement player or default WordPress video player

## Easy Video Player Plugin Usage

### Settings Configuration

It's pretty easy to set up this video player plugin. Once you have installed the plugin simply navigate to the Settings menu where you will be able to configure some options. Mostly you just to need check the "Enable jQuery" option. That will allow the plugin to make use of jQuery library.

### Adding a Video

Now it's time to finally embed a video with a shortcode. To do this create a new post/page and insert the following shortcode:
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4"]
```
Here, url is a shortcode parameter that you need to replace with the actual URL of the video file.

### Video Autoplay

If you want a particular video to start playing when the page loads, you can set the "autoplay" option to "true":
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" autoplay="true"]
```
### Control Size

By default, the player takes up the full width of the content area. You can easily control the size by specifying a width for it:
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" width="500"]
```
The height will be automatically determined based on the ratio (please see the "Control Player Ratio section" for details).

### Control Player Ratio

The player ratio is set to "0.417" by default. You can override it by specifying a different ratio in the shortcode:
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" ratio="0.345"]
```
### Control Player Skin

The video player comes with a default skin. But you can override it by specifying a different skin in the shortcode:
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" class="fp-minimal"]

[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" class="fp-playful"]
```
### Video Loop

If you want a particular video to start playing again when it ends, you can set the "loop" option to "true":
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" loop="true"]
```
### Video Player Template

If you want to use a different video player template, you can specify it in the "template" parameter:
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" template="mediaelement"]
```
By default, the mediaelement template only loads the "metadata" of a video when the page loads. You can set it to "auto" or "none" with the preload parameter in the shortcode.
```
[evp_embed_video url="http://example.com/wp-content/uploads/videos/myvid.mp4" preload="auto" template="mediaelement"]
```
## Documentation
For detailed documentation please visit the [WordPress Video Plugin](https://noorsplugin.com/wordpress-video-plugin/) page.
