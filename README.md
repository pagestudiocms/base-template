# base-template
A starting point for developers of PageStudio templates

## Rational

While PageStudio provides a number of great themes, you may find you want to customize your own look and feel beyond the current capabilities of the Live Editor. This base template serves a means to quickly scaffold and bootstrap your own theme.

## Getting Started

To get started, create a web site that you can use to test your theme...
More info comming soon!

### Understanding Template Folder Structure

Each template is organized using the following folder structure:

    assets: design assets — example: images, fonts and icons
    blocks: reusable blocks of JSON-T (AKA partials) — ex: navigation.block
    collections: collection files — [collection].list, [collection].item, [collection].conf
    scripts: Javascript files — site.js
    styles: stylesheet files — styles.css, styles.less
    [root]: sitewide files — site.region, template.conf

#### Essential Files

At the very minimum, your template needs a .region file and a template.conf.
