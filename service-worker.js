
    
var dataCacheName = 'peacenexus';
var cacheName = 'peacenexus';
var filesToCache = [
  '/',
 "/wp-content/themes/peacenexus/manifest.json",
 "/wp-content/themes/peacenexus/js/build/production.min.js",
 "/wp-content/themes/peacenexus/js/vendor/jquery-2.1.1.min.js",
 "/wp-content/themes/peacenexus/service-worker.js",
 "/wp-content/themes/peacenexus/css/materialize.css",
 "/wp-content/themes/peacenexus/assets/build/LogoPN10.svg"
];

// Listen to installation event
self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('activate', function(e) {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== cacheName && key !== dataCacheName) {
          console.log('[ServiceWorker] Removing old cache', key);
          return caches.delete(key);
        }
      }));
    })
  );
  return self.clients.claim();
});

self.addEventListener('fetch', function(e) {
  console.log('[Service Worker] Fetch', e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});