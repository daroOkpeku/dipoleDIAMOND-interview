let findNumber = [1, 2, 0, 4, 5, 6, 0, 8, 0, 0, 0, 0, 12, 13, 0, 15]
let soundJack = findNumber.filter((item) => item === 0);
console.log(soundJack);
soundJack[0] = '00'
soundJack[1] = '000'
soundJack[2] = '0000'
soundJack[3] = '00000'
soundJack[4] = '000000'
soundJack[5] = '000000'
soundJack[6] = '000000'
console.log(soundJack);