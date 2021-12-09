root-folder:
index.php
Main subscription form page file.
Path on instance:
http://viktors-belinovs.magebithr.com/task3/
This file contains form JS validation and PHP validation.
All code in one file.
Also in successfull e-mail input, entered data is added to database
<subscriptions>.

Folder: <img> ,contains images to display on index.php.

Folder: <admin>, contains files to complete Task 3(PHP).
Files:
createdb.php (code to create database on instance(server))
Musth first run on server, before running other files.
connect.php (connect to database <subscriptions>)
We will use this DB in this task.
File connect.php (like connection link is inserted in other files
with <require> php function.

File createtable.php create table <persons> which will contain 
user submitted data.

For test, we insert first record via file <insertrecord.php>

And finally <index.php> inside folder <admin>
displays database <subscriptions> with search option available.
Path on server:
http://viktors-belinovs.magebithr.com/task3/admin/