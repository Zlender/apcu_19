This is a Dockerfile that reproduces problem mentioned in APCu issue [Hung apaches on pthread wrlocks][1].

1. Build the image `docker build -t apcu_19 .`
1. Run it `docker run -d --name apcu19 -p 8080:80 apcu_19`
1. Crash it
  1. Fill APC cache a little `curl localhost:8080/fillapc.php`
  1. Crash apcu_cache_info so it leaves lock in place `curl localhost:8080/crash.php`
  1. Watch as any apc function hangs waiting for write lock `curl localhost:8080/burn.php `


[1]: https://github.com/krakjoe/apcu/issues/19
