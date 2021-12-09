# magebittask
root-folder:
index.php
Main subscription form page file.
Path on instance:
http://viktors-belinovs.magebithr.com/task3/
This file contains form JS validation and PHP validation.
All code in one file.
Also in successfull e-mail input, entered data is added to database
_subscriptions_.

Folder: _img_ ,contains images to display on index.php.

Folder: _admin_, contains files to complete Task 3(PHP).
Files:
createdb.php (code to create database on instance(server))
Musth first run on server, before running other files.
connect.php (connect to database _subscriptions_)
We will use this DB in this task.
File connect.php (like connection link is inserted in other files
with _require_ php function.

File createtable.php create table _persons_ which will contain 
user submitted data.

For test, we insert first record via file _insertrecord.php_

And finally _index.php_ inside folder _admin_
displays database _subscriptions_ with search option available.
Path on server:
http://viktors-belinovs.magebithr.com/task3/admin/
