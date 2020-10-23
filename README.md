# Description

Custom WordPress theme for **adler-germany** website.

The file with a website design prototype is located in `/figma-design` folder.

_Before installation, pack the `/adler-germany-theme` directory into a ZIP archive._

# Features

- Responsive design;
- Custom animations: _page loading_, _links_, _menu items_;
- JavaScript 'Zig-Zag' layout;

# Required WordPress plugins

- [Custom Field Suite](https://wordpress.org/plugins/custom-field-suite/)

## Custom Field Suite configuration

1. Open WordPress admin panel and create 2 pages: `Home Page` _(type: **Front Page**)_ and `Privacy Policy` _(type: **Privacy Policy Page**)_;
2. On the left side of the screen click: **Settings** -> **Custom Field Suite**;
3. Add new **Field Group** with **Placement** `Post Types = page`;
4. Fill **Fields Group** with values below _(Fields list)_;

### Fields list:

| Label                | Name                 | Field Type |
| -------------------- | -------------------- | ---------- |
| Header Logo Image    | header_logo_image    | file       |
| Header Logo Text     | header_logo_text     | text       |
| Menu Items           | menu_items           | loop       |
| Menu Text            | menu_text            | text       |
| Menu URL             | menu_url             | text       |
| Header Language Hint | header_language_hint | text       |
| Header Language DE   | header_language_de   | text       |
| Header Language EN   | header_language_en   | text       |
| Banner Image         | banner_image         | file       |
| About Heading        | about_heading        | text       |
| About Content        | about_content        | wysiwyg    |
| History Heading      | history_heading      | text       |
| History Items        | history_items        | loop       |
| History Year         | history_year         | text       |
| History Content      | history_content      | wysiwyg    |
| History Image        | history_image        | file       |
| History Image Text   | history_image_text   | text       |
| Gallery Heading      | gallery_heading      | text       |
| Gallery Items        | gallery_items        | loop       |
| Gallery Image        | gallery_image        | file       |
| Gallery Image Text   | gallery_iamge_text   | text       |
| Contacts Heading     | contacts_heading     | text       |
| Contacts Address     | contacts_address     | text       |
| Contscts Phone       | contacts_phone       | text       |
| Contacts Email       | contacts_email       | text       |
| Contacts Image       | contacts_image       | file       |
| Contacts Image Text  | contacts_image_text  | text       |
| Footer Copy          | footer_copy          | text       |

5. Set hierarchy _(Fields hierarchy)_;

### Fields hierarchy:

- header_logo_image
- header_logo_text
- **menu_items**
- - _menu_text_
- - _menu_url_
- header_language_hint
- header_language_de
- header_language_en
- banner_image
- about_heading
- about_content
- history_heading
- **history_items**
- - _history_year_
- - _history_content_
- - _history_image_
- - _history_image_text_
- gallery_heading
- **gallery_items**
- - _gallery_image_
- - _gallery_image_text_
- contacts_heading
- contacts_adderss
- contacts_phone
- contacts_email
- contacts_image
- contacts_image_text
- footer_copy

6. For `Home Page` fill all **custom fields**;
7. For `Privacy Policy` fill: `header_logo_image`, `header_logo_text`, `header_language_hint` (e.g. 'Select Language'), `header_language_de` _(German website version URL)_, `header_language_en` _(English website version URL)_.

# Includes third-party resources

- [UIkit](https://getuikit.com/docs/introduction);
- [Open Sans](https://fonts.google.com/specimen/Open+Sans) font;
- [Saira Stencil One](https://fonts.google.com/specimen/Saira+Stencil+One) font.
