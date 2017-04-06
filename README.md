# tend-geoip
Uses WP Engine's GeoIP redirection.

WPE don't expose continent as an environment variable; this plugin uses the country list included within WPE's own plugin to extract a continent, and redirects to a multisite subsite.
