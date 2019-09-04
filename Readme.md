# Install
+ Acquia Dev Desktop 2
+ php >= 7.2.18
+ drupal >= 8.7.6

---
1. Dowload Acquia Dev Desktop. Link:   https://www.acquia.com/drupal/acquia-dev-desktop
2. Install the Acquia Dev Desktop in your folder, you can install it at the D:\DevDesktop or anywhere you want
3. Dowload Drupal. Link:   https://www.drupal.org/download
4. Unzip the file and put it in the D:\env-website or anywhere you want. Rename the `drupal` to `csam` or `yourwebsitename`

# Build the drupal
1. Launch the Acquia Dev Desktop choose `import local drupal site`,choose the `csam` folder and the php version `7.2.18`
2. Click the `Local site` from the Acquia Dev Desktop and fill out the drupal installation settings.
3. The webpage after building steps:
![](./img/csam1.png)

# How to use drush
1. Launch the Acquia Dev Desktop, click the cmd logo.
2. Download appearance: ```drush dl bootstrap```
3. Download module:   ```drush en module_name```
4. Install module:   ```drush en empty_front_page -y```
5. Clear the cashe: ```drush cr``` or 
```drush cache-clear drush```

# Add the files and pictures
1. Add slideshow by Home --> Administration --> Structure --> Block layout
2. Add Links and mission by Home --> Administration --> Structure --> Block layout,then `Edit custom block` and input the HTML and title of this block.
3. For the publication part, Home --> Administration --> Structure --> Add content type,then add the customized content type `publication` which includes picture/ title/ body. Type-in all the publication content and add the publications Views from the `Add view` that display at the `Block
Page (/publications)`
4. Appearance --> your theme -->setting, choose the color and close the display of theme logo.
The initial page in the http://www.un-csam.org/
![](./img/init-csam.png)


## Navbar
1. Home --> Add content --> Create Basic page.
2. Input title(eg. About Us / Jobs), then copy the source code all content to the basic page.Choose `Full HTML`, the html source code of Jobs could be found from `code\jobs.html`.
3. In the MENU SETTINGS, click the Provide a menu link. Then add the alias.
4. Save it.

##  Slideshow
1. ~~Home --> Administration --> Block layout --> content --> Custom block library~~  Home --> Administration --> Structure --> Block layout  --> Custom block library --> add custom block. 
2. Input the `Slideshow` in the block description, choose `Full Html` and input the html source code in `code\slideshow.html` to the body.![](./img/slideshow.png)

3. Home --> Administration --> Block layout --> content --> place block, add `Slideshow` content to the front page (the block in the content will be shown in the front page).

## Link Layout
1. Home --> Administration --> Structure --> Block layout  --> Custom block library --> add custom block.
2. Input the `Layout` in the block description, choose `Full Html` and input the html source code in `code\link-layout.html` to the body.![](./img/link.png)
3. Home --> Administration --> Block layout --> content --> place block, drap the `Layout` under the `Slideshow`

## Publications
If you want to display something in the front page that it has it's own page,create Views.
1.  Home --> Administration --> Structure --> Add content type.Then add `publications` as new content type.
2.  Choose the Manage fields, add `body` (Text), `publications`(File), `field_image`(Image) as fields of the publications.
3. Add the content. Make sure that 	
`CONTENT TYPE` is `publications`.
4. Home --> Administration --> Structure --> Views, add views for publications. In the `VIEW SETTINGS`,Show  Content of type `publications`.
5. If you want to add a webpage for the publication, click the `Create a page` in the PAGE SETTINGS.  If you want to add a block on the front page, click the `Create a block` in the BLOCK SETTINGS.
6. In the PAGE SETTINGS and BLOCK SETTINGS, choose Display format `Bootstrap Media Object` of fields.
7. Here is the Views Displays setting:
```
FORMAT
    Format:Bootstrap Media Object | Settings
FIELDS
    Content: Title
    Content: Image
    Content: Body
FILTER CRITERIA
    Content: Published (= Yes)
    Content: Content type (= publications)
```
8. Home --> Administration --> Configuration --> Media -->Image styles --> add Image Styles, Change the 
EFFECT	OPERATIONS to `Scale and crop 70×100`.
9. In the Image field content, choose your Image style that toin the Configuration.
10. Home --> Administration --> Structure --> Block Layout --> Siderbar first --> Place block , choose the views `Publications: Block` from the Category of Lists (Views).

## Upcoming Events
1. Home --> Administration --> Structure --> Content types --> Add content type. Create new content type `Event`.Cancel the `Main navigation` in the Menu settings.Cancel the `Promoted to front page` in the Publishing options.Then clcik Save and manage fields.
2. Home --> Add content --> Create Events. Add Events.
3. Home --> Administration --> Structure --> Views, add views for publications. In the `VIEW SETTINGS`,Show  Content of type `Event`.The type 
5. If you want to add a block on the front page, click the `Create a block` in the BLOCK SETTINGS.
6. In the `BLOCK DISPLAY SETTINGS`, choose `unfomatted list`.
7. Add body in the `FIELDS` then remove the title.Here is my setting.
```
FORMAT
Format:Unformatted list | Settings
Show:Fields | Settings
FIELDS
Add fields
List additional actions
Content: Body
```
7. Home --> Administration --> Structure --> Block Layout --> Siderbar first --> Place block.
9. I upload the list to the body for the sake of beauty.
```
<ul>
	<li>Integrated Straw Management Regional Study Tour in India, 7-10 November 2019, Ludhiana, India&nbsp;</li>
</ul>
```

## Logo
1. Login as a administartion. Manage --> Structure --> Block layout --> Custom block library --> Add custom block. ~~Add picture in the front page: Home --> Administration --> Structure --> Block layout --> Add block,~~
2. In the `block layout`, choose the Place block near the Sidebar first, cancel the option of `display title`. Input `<front>` in the Visibility --> Pages --> Show for the listed pages.~~write the title and cancel the option of `display title`, Visibility --> Pages --> Show for the listed pages.~~
2. In the Block --> Edit custom block, in the body upload the picture will be shown in the front.
## Appearance
1. Home --> Administration --> Appearance --> Appearance settings --> Bartik.The color setting could be found from https://uigradients.com . Here is my COLOR SCHEME:
```
Header background top
#667db6
Header background bottom
#348F50
Main background
#ffffff
Lock
Sidebar background
#f1f1ec
```
2. In the LOGO IMAGE, remove the logo supplied by the theme and choose the logo image from local folder.
3. Home --> Administration --> Structure --> Views --> Front --> edit, change the TITLE to `Welcome to Centre for Sustainable Agricultural Mechanization`


## Problem Soving and Tools
###  Change Maximum upload size limit
+ Go go the folder where the Acquia Dev Desktop installed and find the correct php version. I installed it in the `D:\DevDesktop\php7_2_x64\` ， change the `post_max_size = 8M` and `upload_max_filesize = 2M` in the file `php.ini` 
+ Go go the folder where the drupal installed and find the htaccess. I found it at the `D:\env-website\csam\.htaccess`, change the old file 
```
# PHP 5, Apache 1 and 2.
<IfModule mod_php5.c>
  php_value assert.active                   0
  php_flag session.auto_start               off
```
to the 
```
# PHP 5, Apache 1 and 2.
php_value post_max_size 8M
php_value upload_max_filesize 8M
<IfModule mod_php5.c>
  php_value assert.active                   0
  php_flag session.auto_start               off
```
### Use the Git for version control
Download the git from https://git-scm.com/ 
, then add the ```"git.path": "D:/software/Git/bin/git.exe"``` to the `settings.json`

### Export Markdown File
Add the `Markdown PDF` extension and right click the markdown file, you can export it to a png/jpg/html/pdf file.

# Final result
The front page after the content migration:
![](./img/final3.png)
![](./img/website.gif)