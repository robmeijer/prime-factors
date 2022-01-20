# Prime Factors
This exercise requires you to display the prime factors for each given number input.

## Setup
First, clone the repository to your computer as follows:
```bash
git clone https://github.com/robmeijer/prime-factors.git
```

Once it's cloned, change into the new directory, and install the dependencies:
```bash
cd prime-factors
composer install
```

## Exercise
The code for this exercise should be placed in `functions/prime_factors.php`, in the `prime_factors` function.

The function can accept any whole number as the input.

The function must return an array with the prime factors for the given number input.

The function only needs to account for numbers up to and including 30.

E.g.:
- `prime_factors(3)` should return `[3]`
- `prime_factors(12)` should return `[2, 2, 3]`
- `prime_factors(21)` should return `[3, 7]`

## Testing
Once the dependencies are installed, the project can be tested by running the automated tests:
```bash
composer test
```
The exercise is complete once all the testcases pass successfully.
