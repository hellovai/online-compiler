#!/bin/bash
MAXMEM_MB=0.01

FILENAME=$1
cd "data/$FILENAME"

#set to MAXMEM_MB per process in KB. won't affect processes launched on other nodes (e.g. MPI)
ulimit -v $(($MAXMEM_MB*1024))

BOOL=true;

case "$2" in
0)
	OUT="function"
	COMPILE="gcc -fmessage-length=0 -fno-merge-constants -fstrict-aliasing -fstack-protector-all -o $OUT"
	EXT="c"
	RUN="./$OUT"
	;;
1)
	OUT="function"
	COMPILE="g++ -std=c++98 -pedantic-errors -Wfatal-errors -Werror -Wall -Wextra -Wno-missing-field-initializers -Wwrite-strings -Wno-deprecated -Wno-unused -Wno-non-virtual-dtor -Wno-variadic-macros -fmessage-length=0 -ftemplate-depth-128 -fno-merge-constants -fno-nonansi-builtins -fno-gnu-keywords -fno-elide-constructors -fstrict-aliasing -fstack-protector-all -Winvalid-pch -o $OUT"
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
	timeout 5s $RUN &> $FILENAME.out
	val=$?
	if [[ "$val" = "124" ]];
	then
		echo "Runtime exceeded maximum limit (5 seconds)" > $FILENAME.out
	fi
	rm $OUT
fi
rm $FILEOUT
