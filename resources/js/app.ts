import feather from 'feather-icons';
import timeline from './components/timeline';
import Plausible from 'plausible-tracker';

const { trackPageview } = Plausible({
    domain: 'pangio.it',
    apiHost: 'https://dashboard.pangio.it',
});

trackPageview();

console.log("\n%cHey!%c\n\nDid you know that you can view this webpage in your terminal? Try running %ccurl " + document.URL, "font-size: 30pt; color: lightblue; font-weight: bold", "font-weight: bold; font-size: 11pt;", "font-size: 11pt;text-decoration: underline;font-style: italic;color: red")
feather.replace();
timeline();
