<?php return unserialize('a:6:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:15:"cityrovers_user";s:6:"schema";N;s:7:"indexes";N;s:17:"uniqueConstraints";a:1:{i:0;O:37:"Doctrine\\ORM\\Mapping\\UniqueConstraint":2:{s:4:"name";s:12:"useridUnique";s:7:"columns";a:1:{i:0;s:6:"userid";}}}s:7:"options";a:0:{}}i:1;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";N;s:8:"readOnly";b:0;}i:2;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";s:39:"CTRV\\CommonBundle\\Entity\\UserRepository";s:8:"readOnly";b:0;}i:3;O:42:"Doctrine\\ORM\\Mapping\\HasLifecycleCallbacks":0:{}i:4;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:38:"user.register.form.login_already_exist";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:5:"login";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:5;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:38:"user.register.form.email_already_exist";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:5:"email";s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');