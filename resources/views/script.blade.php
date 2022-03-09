@php($accountId = settings('Astrogoat\\Optimizely\\Settings\\OptimizelySettings', 'account_id'))

@if(Astrogoat\Optimizely\Settings\OptimizelySettings::isEnabled() && ! blank($accountId))
    <!-- Optimizely -->
    <link rel="preload" href="//cdn.optimizely.com/js/{{ $accountId }}.js" as="script">
    <link rel="preconnect" href="//logx.optimizely.com">
    <script src="https://cdn.optimizely.com/js/{{ $accountId }}.js"></script>
@endif
