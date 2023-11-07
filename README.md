<h1 align="center">HttpClient PHP Package</h1>

<p align="center">
   <em>A PHP package for make a request in easy way.</em>
</p>

<p align="center">
  <a href="https://github.com/fullstack124/http-client/issues">
    <img src="https://img.shields.io/github/issues/fullstack124/http-client" alt="GitHub issues">
  </a>
  <a href="https://github.com/fullstack124/http-client/stargazers">
    <img src="https://img.shields.io/github/stars/fullstack124/http-client" alt="GitHub stars">
  </a>
  <a href="https://packagist.org/packages/fullstack124/http-client">
    <img src="https://img.shields.io/packagist/dt/fullstack124/http-client" alt="Total Downloads">
  </a>
  <a href="https://github.com/fullstack124/http-client/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/fullstack124/http-client" alt="License">
  </a>
</p>

## Table of Contents

- [Installation](#installation)
- [Features](#features)
- [Usage](#usage)
  - [Basic Usage](#basic-usage)
  - [Request Types](#request-types)
    - [get](#get)
    - [post](#post)
    - [patch](#patch)
    - [put](#put)
    - [delete](#delete)
- [Contribution](#contribution)
- [License](#license)


## Installation

You can install this package using Composer, a popular PHP package manager:

```bash
composer require hilalahmad/http-client
```

## Features

- Send GET, POST, PUT, PATCH, and DELETE requests.
- Customize and set headers for your HTTP requests.
- Process JSON responses with built-in methods.
- Handle cURL errors and HTTP request errors gracefully.

## Basic Usage

Here's an example of how to use the HttpClient package to send a GET request:

```bash
use Hilalahmad\HttpClient\HttpClient;

$url="url of api";

$headers=[
    'Authorization: Bearer your-token', // depend on you 
    'Content-Type: application/json',
]
$response = HttpClient::get($url, $headers);

$datas = HttpClient::getResponse($response);

foreach($datas as $data){
    echo $data->id;
}
```
## Request Types

### GET

Here's an example of how to use the HttpClient package to send a GET request:

```bash
$response = HttpClient::get($url, $headers);

$datas = HttpClient::getResponse($response);

foreach($datas as $data){
    echo $data->id;
}
```

### POST

Here's an example of how to use the HttpClient package to send a POST request:

```bash
$data=[
    'value1'=>'1',
    'value2'=>'2'
];
$response = HttpClient::post($url,$data, $headers);

$datas = HttpClient::getResponse($response);

print_r($datas);
```
### PATCH

Here's an example of how to use the HttpClient package to send a PATCH request:

```bash
$data=[
    'value1'=>'1',
    'value2'=>'2'
];
$response = HttpClient::patch($url,$data, $headers);

$datas = HttpClient::getResponse($response);

print_r($datas);
```
### PUT

Here's an example of how to use the HttpClient package to send a PUT request:

```bash
$data=[
    'value1'=>'1',
    'value2'=>'2'
];
$response = HttpClient::put($url,$data, $headers);

$datas = HttpClient::getResponse($response);

print_r($datas);
```


### DELETE

Here's an example of how to use the HttpClient package to send a PUT request:

```bash
$response = HttpClient::delete($url, $headers);

$datas = HttpClient::getResponse($response);

print_r($datas);
```
## Contribution

If you'd like to contribute to this package or report issues, please check the  <a href="https://github.com/fullstack124/http-client/issues"> Github repo</a> for more details.
 
## License
This package is open-source and is licensed under the MIT License. 
 
