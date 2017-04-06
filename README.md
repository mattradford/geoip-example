# tend-geoip
Uses [WP Engine's](https://www.wpengine.com) GeoIP redirection.

WPE don't expose `continent` as an environment variable; this plugin uses the country list included within [WPE's own GeoIP plugin](https://en-gb.wordpress.org/plugins/wpengine-geoip/) to extract a continent, and redirects to a multisite subsite.
 