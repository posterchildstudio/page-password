# Page Password plugin for Craft CMS 3.x

A simple plugin that allows you to password protect a page. It's design is based the repo https://github.com/davidpanaho/page-password
I've modified it to allow a unique password to be set per page instead of one password for the entire site.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

WIP

## Overview

WIP

## Configuration

WIP

## Usage

After installing, create a single that you'd like to password protect.  Then create a text field with the handle of 'pagePassword' and add it to that section.  Whatever password you type into that field will protect that single.

Then, in the template for that single add the following:

```html
{% set id = entry.id|md5 %}
{% if craft.pagePassword.accessGranted(id) %}

    <p>Whatever you want to give acccess to</p>

{% else %}

    <h1>Enter your access code:</h1>
    
    {% set sessionErrors = craft.app.session.getFlash('error') %}
    {% if sessionErrors is defined %}
        <ul class="mb-2 text-center">
            {% for error in sessionErrors %}
                <li class="text-base">{{ error }}</li>
            {% endfor %}
        </ul>
    {% endif %}
    <form method="post" action="" accept-charset="UTF-8">
        {{ csrfInput() }}
        <input type="hidden" name="redirect" value="/{{ craft.app.request.pathInfo }}">
        <input type="hidden" name="pageId" value="{{ entry.id }}">
        <input type="hidden" name="id" value="{{ entry.id|md5 }}">
        <input type="hidden" name="action" value="page-password/default/authorise">
        <input type="text" name="password" value="">
        <input type="submit" value="Log In">
    </form>

{% endif %}
```

## Roadmap

WIP
