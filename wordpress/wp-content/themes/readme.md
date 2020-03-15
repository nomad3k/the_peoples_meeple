# Testing

* Check the site looks ok on
  * Desktop Machine
  * Tablet
  * Mobile

# Adding Photos
* Maintain an aspect ratio of 3:2 for photos, to ensure they are consistent across the site.

# Editing Café Menus
* Add a “Classic Paragraph” to enable the TinyMCE editor… which is WAY better than the standard WordPress one
* Add categories with [tpm_category color=”xxx”]Text[/tmp_category] where color (American spelling) is “red”, “green”, “blue”, “orange” or “purple”
* Add a Table for the menu
  * When you’ve populated the table as needed
    * Highlight all the Price cells (including header) and
      * right align them
      * edit the Cell Properties so they have a width of “128px”
    * Highlight all the other cells
      * edit the cell properties so they have a width of “auto”
      * Then the menu will appear consistent and resize properly across devices.

# Shortcodes

The website makes use of lots of `[shortcode]` entries to do things like, build custom links, generate placards and meeple.  Here are all the shortcodes.

Note: `color` is always the American spelling.

* `[tpm_nav_box title=”” image=”” color=”” link=”x”]`

  Displays the Eat/Drink/Play nav boxes.  Currently only works for title = “Eat”, “Drink” or “Play”.  Need more time to address this.

* `[tpm_child_pages]`

  Replaced by [tpm_nav_box]

* `[tpm_peer_pages]`

  Replaced by [tpm_nav_box]

* `[tpm_placard text=”Unknown” fontsize=”56” rotate=”0” width=”300” padding=”30”]`

  Optional: `fontsize`, `rotate`, `width`, `padding`

  Displays a placard with custom text.

* `[tpm_meeple rotate=”0” width=”256” padding=”32” color=”red”]`

  Displays a meeple

* `[tpm_link href=””] … [/tpm_link]`

  Turns a shortcode above into a link to another page by injecting it into the middle.
