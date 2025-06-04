<?php
declare(strict_types=1);
/**
 * @file
 * Example functionality for the example_module.
 */

namespace Drupal\example_module;

class ExampleService {
  /**
   * Returns a greeting message.
   *
   * @param string $name
   *   The name to greet. Defaults to 'World'.
   *
   * @return string
   *   The greeting message.
   */
  public function getGreeting($name = 'World') {
    return "Hello, $name!";
  }

  /**
   * Reverses a string.
   *
   * @param string $input
   *   The string to reverse.
   *
   * @return string
   *   The reversed string.
   *
   * @throws \InvalidArgumentException
   *   Thrown if the input is not a string.
   */
  public function reverseString(string $input): string {
    return strrev($input);
  }

  /**
   * Sums an array of numbers.
   *
   * @param int[]|float[] $numbers
   *   The array of numbers to sum.
   *
   * @return int|float
   *   The sum of the numbers.
   */
  public function sumArray(array $numbers): int|float {
    return array_sum($numbers);
  }

  /**
   * Returns a configuration value (simulated for test).
   *
   * @param string $key
   *   The config key to retrieve.
   * @param mixed $default
   *   The default value if the key is not found.
   *
   * @return mixed
   *   The config value or default.
   */
  public function getConfigValue($key, $default = null) {
    // Simulate config for demonstration.
    $config = [
      'site_name' => 'Drupal Sandbox',
      'items_per_page' => 10,
    ];
    return $config[$key] ?? $default;
  }

  /**
   * Checks if a string is a palindrome (static utility).
   *
   * @param string $input
   *   The string to check.
   *
   * @return bool
   *   TRUE if the string is a palindrome, FALSE otherwise.
   */
  public static function isPalindrome($input) {
    $input = strtolower(preg_replace('/\W/', '', $input));
    return $input === strrev($input);
  }
}
