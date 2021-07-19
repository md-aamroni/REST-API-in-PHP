<?php

/**
 * API Message Responser
 *
 * @param string|array|int
 * @return string|array
 */
function arrayResponse($array, $response = 200, $status = 'Ok')
{
	echo json_encode(array(
		'message'  => is_array($array) ? 'Total '. count($array) .' records found' : 'Records fetched successfully',
		'response' => $response,
		'status'   => $status,
		'data'     => $array,
	), JSON_PRETTY_PRINT);
}


function messageResponse($message = 'Something went wrong', $response = 201, $status = 'Ok')
{
	echo json_encode(array(
		'message'  => $message,
		'response' => $response,
		'status'   => $status,
	), JSON_PRETTY_PRINT);
}


function blankResponse($message = 'No matched records found', $response = 202, $status = 'No Content')
{
	echo json_encode(array(
		'message'  => $message,
		'response' => $response,
		'status'   => $status,
	), JSON_PRETTY_PRINT);
}


function requestError($message = 'Invalid Phrase Request', $response = 203, $status = 'Error Request')
{
	echo json_encode(array(
		'message'  => $message,
		'response' => $response,
		'status'   => $status,
	), JSON_PRETTY_PRINT);
}


function paramError($message = 'Invalid Requested Parameter', $response = 204, $status = 'Error Param')
{
	echo json_encode(array(
		'message'  => $message,
		'response' => $response,
		'status'   => $status,
	), JSON_PRETTY_PRINT);
}


function credentialError($message = 'Credential is Not Match', $response = 205, $status = 'Error Credential')
{
	echo json_encode(array(
		'message'  => $message,
		'response' => $response,
		'status'   => $status,
	), JSON_PRETTY_PRINT);
}
