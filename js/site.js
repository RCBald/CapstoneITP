function discount_button() {
    const systemDate = new Date();
    const systemTime = systemDate.getMinutes();
    if (systemTime %2 == 0) {
        alert(" You can recieve a discount!");
    } else{
        alert(" Try again buddy, no discount for you lol");
    }
}