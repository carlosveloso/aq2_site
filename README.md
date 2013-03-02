aq2_site
========

Action Q2 server browsing site

install:

Create this structure in app/ dir with read and write permissions

tmp
|-- cache
|   |-- models
|   |   `-- empty
|   |-- persistent
|   |   |-- empty
|   `-- views
|       `-- empty
|-- logs
|   `-- empty
|-- sessions
|   `-- empty
`-- tests
    `-- empty

the copy and rename

app/core.php.default -> app/core.php
app/database.php.default -> app/database.php


to add a server:

app/Controllers/PagesController.php -> line 67