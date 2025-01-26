'use strict'
const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

(async () => {
    await sleep(2000);
    const quote = "May you get to Heaven an hour before the Devil knows you're dead";
    console.log(quote);
})();

