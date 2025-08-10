# GEMINI.md
This file provides guidance to GEMINI when working with code in this repository.

## Common Commands

### Testing

To run the test suite, execute the following command from the root directory:

```bash
php scripts/Test/Test.php
```

This will run all the tests and print the results to standard output. To save the results to a file, you can use:

```bash
php scripts/Test/Test.php > scripts/Test/result.txt
```

## Code Architecture

This is a PHP-based Reversi game. The application follows a simple client-server architecture.

### Frontend

The frontend is composed of HTML, CSS, and JavaScript files located in the root directory, `css/`, and `js/` directories. The main page is `index.html`. The frontend sends requests to the backend to update the game state.

### Backend

The backend is written in PHP and is located in the `scripts/` directory. The core logic of the Reversi game is implemented in the `scripts/Model/` directory. The main classes are:

*   `Reversi`: Represents the game board and its state.
*   `ReversiPlay`: Handles the game play logic.
*   `ReversiAnz`: Analyzes the game board.

The backend uses PHP sessions to maintain the game state between requests. The entry point for the backend logic is likely through the PHP files in the `scripts/` directory that are called by the frontend.
