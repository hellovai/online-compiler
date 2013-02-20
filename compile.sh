#!/bin/bash

FILENAME=$1
cd "data/$FILENAME"
BOOL=true;
case "$2" in
0)
	OUT="function"
	COMPILE="gcc -o $OUT"
	EXT="c"
	RUN="./$OUT"
	;;
1)
	OUT="function"
	COMPILE="g++ -o $OUT"
	EXT="cpp"
	RUN="./$OUT"
	;;
2)
	COMPILE="./../filter_java"
	BOOL=false
	;;
3)
	OUT="function"
	COMPILE="gcc -o $OUT"
	EXT="s"
	RUN="./$OUT"
	;;
esac

FILEOUT=$FILENAME.$EXT
cp $FILENAME.prog $FILEOUT
$COMPILE $FILEOUT &> $FILENAME.comp
if [ -f $OUT ];
then 
	$RUN &> $FILENAME.out
	rm $OUT
fi
rm $FILEOUT
