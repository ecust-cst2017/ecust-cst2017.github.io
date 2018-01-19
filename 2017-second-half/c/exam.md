# C语言
- [C语言复习音频-在线听](audio.html)

- [《C语言程序设计》模拟试卷D](201206071326011.pdf)
- [《C语言程序设计》模拟试卷D答案及讲解](201206071326012.pdf)

- [邱怡试卷A面](C语言试卷A面.PNG)
- [邱怡试卷B面](C语言试卷B面.PNG)

- [程序设计题汇总复习.zip 丁帅帅](程序设计题汇总复习.zip)
- [C语言最后2节课书本的考试范围+补充题 梅园浩](https://note.youdao.com/share/index.html?id=75fa9a74bc929ed3f48c29d63cb34a67&type=note#/)

#### 作业
- [傅佳俊C语言作业.zip](傅佳俊C语言作业.zip)
- [徐彬彬C语言作业.zip](zuoye-xubinbin.zip)

#### 书上考试题目
- [C语言作业题目答案及考试标.pdf](http://openpublic.oss-cn-shanghai.aliyuncs.com/2017-jxjy/C%E8%AF%AD%E8%A8%80%E4%BD%9C%E4%B8%9A%E9%A2%98%E7%9B%AE%E5%8F%8A%E7%AD%94%E6%A1%88.pdf)
- 第5章（63页 ）：5.9，5.8，5.10 
- 第6章：6.4，6.8，6.10，6.11
- 第7章（118页）：7.5，7.7（编程）
- 第8 章：8.6，8.7，


#### 5.8 打印99乘法表 书上答案
```
#include <stdio.h>
void main()
{
    int i,j;
    for(i=1;i<10;i++)
        for(j=1;j<10;j++)
            printf((j==9)?"%4d\n":"%4d", i*j);
}
```

#### 5.9 求Fibonacci数列的前20项，Fibonacci数列的特点是:第一、二次项的值都为1,从第三项开始，每一项都是前两项之和
```
#include <stdio.h>
void main()
{
    int i,j,k;
    i=j=1;
    for (int n=0; n<20; n++) {
        if (n<2) {
            printf("%4d", 1);
        } else {
            printf("%4d", i+j);

            k=j;
            j=(i+j);
            i=k;
        }
    }
}

#下面是丁帅帅作法
#include <stdio.h>
main()
{
    int a[20],i,n=20,m=0;
    a[0]=1;a[1]=1;
    for(i=2;i<n;i++)
        a[i]=a[i-1]+a[i-2];
    for(i=0;i<n;i++)
    {
        printf("%5d",a[i]);
        m++;
        if(m%5==0)
            printf("\n");
    }
}
```

#### 5.10 编写程序,求解爱因斯坦问题:有一个长阶梯，如果每步跨两阶则最后剩一阶；如果每步跨3阶则最后剩2阶；如果每步跨5阶则最后剩4阶；如果每步跨6阶则最后剩5阶；只有每步跨7阶才正好走完。问一共多少阶
```
#刘义宝做法
#include <stdio.h>
void main()
{
    int i=1, total, success=0;
    while (!success) {
        total = i*7;i++;
        if (total%2==1 && total%3==2 && total%5==4 && total%6==5) {
            success = 1;
        }
    }
    printf("%d\n", total);
}

#丁帅帅作法
#include <stdio.h>
main()
{
	int i=0;
	while(i%2!=1&&i%3!=2&&i%5!=4&&i%6!=5)
		{
			i=i+7;
		}
	printf("%d\n",i );
}

#书上答案
#include <stdio.h>
main()
{
    int x=7;
    while(x%3!=2 || x%5!=4 || x%6!=5)
        x+=14;
    printf("%d\n", x);
}
```

#### 6.4 将两个字符串按升序合并 先合并再选择排序 书上答案太复杂
```
#刘义宝做法
#include <stdio.h>
#include <string.h>
void main()
{
    int i,j,k,aLength;
    char a[80] = "zkcvbn";
    char b[80] = "asfd";
    aLength = strlen(a);
    for(i=0; b[i]; i++){
        a[aLength] = b[i];
        aLength++;
    }

    aLength = strlen(a);
    for(i=0; i<aLength-1; i++){
        for(j=i+1; j<aLength; j++){
            if (a[i] > a[j]) {
                k = a[i];
                a[i] = a[j];
                a[j] = k;
            }
        }
    }

    printf("%s\n", a);
}

#丁帅帅做法
#include <stdio.h>
main()
{
	char a[]="zhangsan",b[]="wangwu",c[20];
	int i=0,j=0;
	while(a[i])
	{
		c[i]=a[i];i++;
	}
	while(b[j])
	{
		c[i+j]=b[j];j++;
	}
	c[i+j]='\0';
	puts(c);
}
```

#### 6.8 由键 盘 输 入 一 个 同学的姓 名 ， 查找在指 定 的班 级 中 是 否 存 在
```
#书上答案
void main()
{
    int i, flag=0;
    char name[5][20] = {"Li Fei", "He Fei", "Liu Lu", "Zhang San", "Wang Na"};
    char yourname[20];
    printf("Enter your name:");gets(yourname);
    for (i=0; i<5; i++)
        if (strcmp(name[i], yourname) == 0) flag=1;
    puts(yourname);
    if (flag)
        printf("is in this class");
    else
        printf("is not in this class");
}
```

#### 6.10 编写程序,实现strcat函数的功能,将字符串s1与s2尾首相接
```
#书上答案
void main()
{
    char str1[80], str2[80]; int i,j;
    gets(str1);
    gets(str2);
    i=strlen(str1);
    j=0;
    while (str2[j]!='\0') str1[i++]=str2[j++];
    str1[i]='\0';
    printf("%s", str1);
}
```

#### 6.11 将用字符串表示的十六进制数转化为十进制数 ， 如2A转化为42 。 十六进制可以由数字0到9和大写字母A至F组成的字符串表示 。
```
#书上答案
void main()
{
    int data=0,i,n; char str[10];
    printf("enter hex string\n");
    gets(str);
    for(i=0; str[i]!='\0'; i++){
        if(str[i]>='0'&&str[i]<='9')
            n=str[i]-'0';
        else if(str[i]>='A'&&str[i]<='F')
            n=str[i]-'A'+10;
        else exit(0);
        data=data*16+n;
    }
    printf("%d", data);
}
```

#### 7.5 以 下 程 序 中 ， 函 数 c o l l e c t 的 功 能 是 对 n 位 学生的考试 成绩 统 计 总 平 均 分...
```
#以 下 程 序 中 ， 函 数 c o l l e c t 的 功 能 是 对 n 位 学生的考试 成绩 统 计 总 平 均 分 和 低 于 总 平
#均分的人 数 ， 本题 约 定， 人 数 的统 计 数 由函 数 返 回 ， 总平均分 则 由形 式 参 数 a v e r 带出
#该 程 序 有 错 误 ， 请指 出其 出错 行 ， 并修改 它 直 至达 到 程 序 的预 期 功 能 为 止
#下面是改正好的代码
#include <stdio.h>
#define N 10
int collect(float s[], int n, float *aver)
{
    int i,count=0;
    float x=0.0;
    for(i=0; i<N; i++) x+=s[i];
    printf("%d", x);
    x=x/N;
    for(i=0; i<N; i++)
        if(s[i]<x) count++;
    *aver = x;
    return count;
}

mainx()
{
    float s[N],aver; int i,num;
    for(i=0;i<N;i++) scanf("%f", &s[i]);
    num=collect(s,N,&aver);
    printf("average=%.1f\n", aver);
    printf("<%.1f is:%d\n", aver, num);
}
```

#### 7.7 编写函数 int isprime(int n),判断整数n是否是为素数,再设计main函数,调用isprime函数,输出3至m(3<m<100)之内的所有素数
```
#丁帅帅答案 比书上答案思路清晰
#编写函数 int isprime(int n),判断整数n是否是为素数,再设计main函数,
#调用isprime函数,输出3至m(3<m<100)之内的所有素数
#解析：素数指只能被1和它本身整除的数 2，3，5，7，11，13，....

#include <stdio.h>
int  isprime(int n)
{
    int i,yn=1;
    for(i=2;i<=n/2;i++)
        if(n%i==0)
        {
            yn=0;
        }
    return yn;
}
main()
{
    int m,n;
    scanf("%d",&m);
    for(n=3;n<m;n++)
    {
        if(isprime(n))
        {
            printf("%d", n);
        }
    }
}
```