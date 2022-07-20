import Plausible from 'plausible-tracker';

const { trackPageview } = Plausible({
    domain: 'pangio.it',
    apiHost: 'https://dashboard.pangio.it',
});

trackPageview();
