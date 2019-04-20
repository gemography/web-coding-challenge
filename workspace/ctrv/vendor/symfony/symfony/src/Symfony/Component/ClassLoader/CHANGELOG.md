CHANGELOG
=========

2.1.0
-----

 * added a DebugClassLoader able to wrap any autoloader providing a findFile
   method
 * added a new ApcClassLoader and XcacheClassLoader using composition to wrap
   other loaders
 * added a new ClassLoader which does not distinguish between namespaced and
   pear-like classes (as the PEAR convention is a subset of PSR-0) and
   supports using Composer's namespace maps
 * added a class map generator
 * added support for loading globally-installed PEAR packages
