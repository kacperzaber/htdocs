// const tab = ["Kamil", "Kacper"];
// const tab2 = ["Nowak"];

// tab.push("Kacper"); // dodaje element na koniec.  Zwraca zaktualizowaną długość tablicy

// tab.unshift("Maciek"); // dodaje element na początek. Zwraca zaktualizowaną długość tablicy

// tab.pop(); // usuwa ostatni element tablicy. Metoda zwraca usunięty element
// console.log(tab.pop()); // wyświetlam osotatni usuniety element tablicy

// const user = tab.shift(); // usuwa pierwszy element tablicy. Metoda zwraca usunięty element

// const twoTabs = tab.concat(tab2); // łączenie dwóch tablic

// // od ES6 operator spread, też łączy talice
// const twoTab2 = [...tab, ...tab2];
// const twoTab = [...tab, ...tab2, "dodatkowe"];

// // Metody nie modyfikują tablicy, dlatego zwróconą wartość należy przypisać do zmiennej
// twoTab.slice(0, 3); // pobiera trzy elementy z tablicy
// twoTab.slice(-1); // ostatni element z tablicy

// // Metoda wpływa na tablice, wywołanie zmienia tablicę, nie trzeba przypisywać do zmiennej
// //twoTab.splice(1,2) // usuwa dwa elementy od 1 indeksu (druga wartość wartość).Funkcja zwaraca usunięty element, więc możemy go wykorzystać

// // twoTab.slice(1,1,'Maciek') // Usuwa jeden element z tablicy, zastępując go Maćkiem
// // twoTab.slice(0,2,'Maciek') // Usuwa dwa elementy z tablicy, zastępując go innymi wartościami
// // twoTab.slice(0,1,'Maciek', 'Kacper') // Usuwa jeden element z tablicy, zastępując go dwoma elementami
// // twoTab.slice(1,0,'Maciek') // W miejsce pierwszego indeksu wstawia Maćka
// // twoTab.slice(0,0,'Maciek','Kacper') // Dodaje na początku dwa elementy, podobnie jak unshift

// // Metody destukcyjne to takie, które zmieniają tablice na której pracujemy( bez przypissywania zmiennej)

// // twoTab.join(); // Tworzy stringa z elementów, oddzielone są przecinkami
// // twoTab.join(' -- \n') // zamiast przecinka możemy zmienić na coś innego \n dla czytelności
// // twoTab.reverse() // odwraca tablice. Metoda destukcyjna

// // Tworzy tablice na podstawie strina. Bierze elementy podzielone przecinkiem
// "Gdańsk,Elbląg,Gdynia,Reda".split(","); // Można dodać parametr który określa ile elementów .split(',', 3

// let sum = 0;
// let liczba = 50;

// const calculateAverage = (...numbers) => {
//   let sum = 0;
//   numbers.forEach((number) => (sum += number));
//   console.log("Suma", sum / numbers.length);
// };

// calculateAverage(1, 2, 3, 4, 5);

// const filterEvenNumbers = (...numbers) => {
//   let okNumbers = [];
//   numbers.forEach((number) => (number % 2 == 0 ? okNumbers.push(number) : ""));
//   console.log(okNumbers);
// };

// filterEvenNumbers(1, 2, 3, 4, 5, 6);

// const countOccurrences = (arrays, element) => {
//   let count = 0;
//   arrays.forEach((array) => (array == element ? count++ : ""));
//   return count;
// };
// console.log(
//   countOccurrences(["apple", "banana", "apple", "orange", "banana"], "banana")
// );

const startStoper = () => {
  console.log("click");
};

const btnStart = document.body.querySelector(".main");

btnStart.addEventListener("click", startStoper);
