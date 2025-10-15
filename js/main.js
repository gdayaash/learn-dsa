const cars = [
  {
    name: "Skoda",
    year: 1987,
    rating: 4.5,
  },
  {
    name: "Toyota",
    year: 2005,
    rating: 4.8,
  },
  {
    name: "Tesla",
    year: 2022,
    rating: 5.0,
  },
];

const carsName = cars.map((r) => r.name);

console.log(carsName);

const carsYear = cars.map((r) => r.year).filter((year) => year > 1987);

console.log(carsYear);
