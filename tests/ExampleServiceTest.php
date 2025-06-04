<?php
/**
 * @file
 * PHPUnit tests for ExampleService.
 */

namespace Drupal\example_module\Tests;

use Drupal\example_module\ExampleService;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class ExampleServiceTest extends TestCase {
  /**
   * Test the default greeting message.
   */
  public function testGetGreetingDefault() {
    $service = new ExampleService();
    $this->assertEquals('Hello, World!', $service->getGreeting());
  }

  /**
   * Test the greeting message with a custom name.
   */
  public function testGetGreetingCustomName() {
    $service = new ExampleService();
    $this->assertEquals('Hello, Drupal!', $service->getGreeting('Drupal'));
  }

  /**
   * Test reversing a string and an empty string.
   */
  public function testReverseString() {
    $service = new ExampleService();
    $this->assertEquals('olleh', $service->reverseString('hello'));
    $this->assertEquals('', $service->reverseString(''));
  }

  /**
   * Test that reverseString throws an exception for non-string input.
   */
  public function testReverseStringThrowsException() {
    $this->expectException(\TypeError::class);
    $service = new ExampleService();
    $service->reverseString(['not a string']);
  }

  /**
   * Test summing an array of positive numbers.
   */
  public function testSumArrayPositiveNumbers() {
    $service = new ExampleService();
    $this->assertEquals(6, $service->sumArray([1, 2, 3]));
  }

  /**
   * Test summing an array with mixed numbers.
   */
  public function testSumArrayMixedNumbers() {
    $service = new ExampleService();
    $this->assertEquals(0, $service->sumArray([-1, 1]));
  }

  /**
   * Test summing an empty array.
   */
  public function testSumArrayEmptyArray() {
    $service = new ExampleService();
    $this->assertEquals(0, $service->sumArray([]));
  }

  /**
   * Test retrieving configuration values and defaults.
   */
  public function testGetConfigValue() {
    $service = new ExampleService();
    $this->assertEquals('Drupal Sandbox', $service->getConfigValue('site_name'));
    $this->assertEquals(10, $service->getConfigValue('items_per_page'));
    $this->assertNull($service->getConfigValue('not_found'));
    $this->assertEquals('default', $service->getConfigValue('not_found', 'default'));
  }

  /**
   * Test the static palindrome checker utility.
   */
  public function testIsPalindrome() {
    $this->assertTrue(ExampleService::isPalindrome('Madam'));
    $this->assertTrue(ExampleService::isPalindrome('A man, a plan, a canal, Panama'));
    $this->assertFalse(ExampleService::isPalindrome('Drupal'));
  }
}
