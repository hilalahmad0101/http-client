<?php

namespace Hilalahmad\HttpClient;

/**
 * A custom HTTP client for sending HTTP requests with cURL.
 */
class HttpClient
{
    /**
     * Send an HTTP GET request with custom headers.
     *
     * @param string $url The URL to send the GET request to.
     * @param array $headers An array of custom headers.
     *
     * @return array|null The response data or null in case of errors.
     */
    public static function get($url, $headers = [])
    {
        // Create a new cURL resource for GET request
        $ch = curl_init($url);

        // Set the cURL options for GET request
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Execute the cURL session for GET request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            // Handle cURL errors here
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        return $response;
    }

    /**
     * Send an HTTP PUT request with custom headers.
     *
     * @param string $url The URL to send the PUT request to.
     * @param array $data The data to include in the request body.
     * @param array $headers An array of custom headers.
     *
     * @return array|null The response data or null in case of errors.
     */
    public static function put($url, $data, $headers = [])
    {
        // Create a new cURL resource for PUT request
        $ch = curl_init($url);

        // Set the cURL options for PUT request
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Assuming JSON data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Execute the cURL session for PUT request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            // Handle cURL errors here
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        return $response;
    }

    /**
     * Send an HTTP PATCH request with custom headers.
     *
     * @param string $url The URL to send the PATCH request to.
     * @param array $data The data to include in the request body.
     * @param array $headers An array of custom headers.
     *
     * @return array|null The response data or null in case of errors.
     */
    public static function patch($url, $data, $headers = [])
    {
        // Create a new cURL resource for PUT request
        $ch = curl_init($url);

        // Set the cURL options for PUT request
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Assuming JSON data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Execute the cURL session for PUT request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            // Handle cURL errors here
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        return $response;
    }

    /**
     * Send an HTTP POST request with custom headers.
     *
     * @param string $url The URL to send the POST request to.
     * @param array $data The data to include in the request body.
     * @param array $headers An array of custom headers.
     *
     * @return array|null The response data or null in case of errors.
     */
    public static function post($url, $data, $headers = [])
    {
        $ch = curl_init($url);

        // Set the cURL options for POST request
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Assuming JSON data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Execute the cURL session for POST request
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            // Handle cURL errors here
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        return $response;
    }

    /**
     * Send an HTTP DELETE request with custom headers.
     *
     * @param string $url The URL to send the DELETE request to.
     * @param array $headers An array of custom headers.
     *
     * @return array|null The response data or null in case of errors.
     */
    public static function delete($url, $headers = [])
    {
        // Create a new cURL resource for DELETE request
        $ch = curl_init($url);

        // Set the cURL options for DELETE request
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Execute the cURL session for DELETE request
        $response = curl_exec($ch);
        // Check for cURL errors
        if (curl_errno($ch)) {
            // Handle cURL errors here
            return null;
        }

        // Close the cURL session
        curl_close($ch);

        return $response;
    }




    // Implement other HTTP request methods (PUT, PATCH, POST, DELETE) similarly

    /**
     * Process a JSON response and extract specific data.
     *
     * @param string $response The raw response data.
     *
     * @return array|null The extracted data or null if not applicable.
     */
    public static function getResponse($response)
    {
        if ($response !== false) {
            $responseData = json_decode($response, false); // Assuming JSON response
            return $responseData;
        } else {
            return null;
        }
    }
}
