imname='C8.jpg';
d=dir('salientdatabase');
imwrite(imresize(imread(imname),[300,300]),imname);
strcmd = ['HSaliency.exe ' imname ' .\'];
system(strcmd);
imnamek=imread([imname]);
mapstage2=imread([imname(1:end-4) '_res.png']);
Image1= hackt(mapstage2,imnamek);
imLBP1=lbp(Image1);
count=1;
for i=3:length(d)
d1=load(['salientdatabase\' d(i).name '\LBP.mat']);
x2=d1.imLBP;
for j=1:length(x2)
matchcose(count)=pdist2(imLBP1,x2(j).f,'euclidean');
matind(count)=i-2;
count=count+1;
end
end
[ij,ind]=min(matchcose);
class=matind(ind);
d1=load(['salientdatabase\' d(class+2).name '\LBP.mat']);
x2=d1.imLBP;
%x1=load(['salientdatabase\LBP.mat']);
for i=1:length(x2)
matchcose1(i)=pdist2(imLBP1,x2(i).f,'euclidean');
end
[ima,ind]=sort(matchcose1);
fid2 = fopen('ret.txt','w');
for i=1:5
fprintf(fid2,'%s\n',['database\' d(class+2).name '\' x2(ind(i)).n]);
end
fclose(fid2);
