aq2_site
========

Action Q2 server browsing site
********
**Install:**

Create this structure in app/ dir with read and write permissions

* tmp
* |-- cache
* |   |-- models
* |   |-- persistent
* |   |-- views
* |-- logs
* |-- sessions
* |-- tests

then copy and rename

> app/core.php.default -> app/core.php

> app/database.php.default -> app/database.php

********************

**To add a server:**

> app/Controllers/PagesController.php -> line 67
