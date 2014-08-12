<?php
Class Salt{
	public static function generate()
	{
		$s1=rand(0,51);
		$s2=rand(0,51);
		$s3=rand(0,51);
		$str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$salt=$str[$s1].$str[$s2].$str[$s3];
		return $salt;
	}
} 
