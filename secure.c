#include <signal.h>
#include <syscall.h>
#include <sys/ptrace.h>
#include <sys/types.h>
#include <sys/wait.h>
#include <unistd.h>
#include <errno.h>
#include <sys/user.h>
#include <sys/reg.h>
#include <sys/syscall.h>
#include <stdio.h>
#include <string.h>
#include <fcntl.h>
#include <sys/stat.h>

void usage();

int main(int argc, char **argv)
{
        if(argc != 1)
            usage();

        char* fileloc = "/u/vgupta/github/sample/data/random/function";

        int i;
        pid_t child;
        int status;
        long orig_eax;
        int kill_ret = 0;




        child = fork();


        if(child == 0)
        {
                ptrace(PTRACE_TRACEME, 0, NULL, NULL);
                execl(fileloc, fileloc,  NULL);
        }
        else
        {
                i = 0;
                while(1)
                {
                        wait(&status);
                        if (WIFEXITED(status) || WIFSIGNALED(status) )
                                break;

                        orig_eax = ptrace(PTRACE_PEEKUSER, child, 8 * ORIG_RAX, NULL);
                        switch (orig_eax)
                        {
                            case 87: //for stdlib remove()
                            case 56: //for system call
                                fprintf(stderr, "Invalid System Call: SYST_CALL\n");
                                kill_ret = kill(child, SIGKILL);
                                if (kill_ret == -1)
                                {
                                    fprintf(stderr, "Failed to kill ---> %s\n", strerror(errno));
                                }
                                break;
                        }
                        printf("%d time, system call %ld\n", i++, orig_eax);
                        ptrace(PTRACE_SYSCALL, child, NULL, NULL);
                }
        }
        return 0;
}

void usage() {
    printf("./secure <randomchars> <type>\n");
    exit(0);
}