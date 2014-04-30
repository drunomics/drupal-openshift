Drupal on OpenShift
===================

This is a modified version of https://github.com/openshift/drupal-quickstart,
targeted for code driven deployments.

Usage
-----
Put your Drupal code below web/, but do not commit your settings.php or files
directories. The sites/default/settings.live.php will be linked to the default
settings.php file during deployment.

Repo layout
-----------

web/ - Put your Drupal code here.
../data - For files - holds subdirectories for public and private files.
.openshift/pear.txt - list of pears to install  
.openshift/action_hooks/build - Script that gets run every push, just prior to starting your app  
